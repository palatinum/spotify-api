<?php

namespace Src\Infrastructure\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use InvalidArgumentException;
use Src\Application\DTOs\GetTrackByIdDTO;
use Src\Application\UseCase\GetTrackByIdUseCase;
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
     * @param string $trackId
     * @return JsonResponse
     */
    public function __invoke(string $trackId): JsonResponse
    {
        try {
            $dto = new GetTrackByIdDTO($trackId);
            $track = $this->getTrackById->__invoke($dto);
            return response()->json($track->toArray(), 200);
        } catch (TrackNotFoundException $exception) {
            return response()->json(['message' => $exception->getMessage()], 404);
        } catch (InvalidArgumentException $exception) {
            return response()->json(['message' => $exception->getMessage()], 400);
        }
    }
}
