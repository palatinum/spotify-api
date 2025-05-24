<?php

namespace Src\Infrastructure\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\TrackIdEmptyResource;
use App\Http\Resources\TrackIdInvalidFormatResource;
use App\Http\Resources\TrackNotFoundResource;
use App\Http\Resources\TrackResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use InvalidArgumentException;
use Src\Application\DTOs\GetTrackByIdDTO;
use Src\Application\UseCase\GetTrackByIdUseCase;
use Src\Domain\Exceptions\TrackIdEmptyException;
use Src\Domain\Exceptions\TrackIdInvalidFormatException;
use Src\Domain\Exceptions\TrackNotFoundException;

class GetTrackByIdController extends Controller
{
    /**
     * @param GetTrackByIdUseCase $getTrackById
     */
    public function __construct(
        private readonly GetTrackByIdUseCase $getTrackById
    ){}

    /**
     * Get track by id
     *
     * @param string $trackId
     * @return JsonResource
     */
    public function __invoke(string $trackId): JsonResource
    {
        try {
            $dto = new GetTrackByIdDTO($trackId);
            $track = $this->getTrackById->__invoke($dto);
            return new TrackResource($track->toArray());
        } catch (TrackNotFoundException $exception) {
            return new TrackNotFoundResource(['message' => $exception->getMessage()]);
        } catch (TrackIdEmptyException $exception) {
            return new TrackIdEmptyResource(['message' => $exception->getMessage()]);
        } catch (TrackIdInvalidFormatException $exception) {
            return new TrackIdInvalidFormatResource(['message' => $exception->getMessage()]);
        }
    }
}
