<?php

namespace Src\Application\UseCase;

use InvalidArgumentException;
use Src\Application\DTOs\GetTrackByIdDTO;
use Src\Domain\Entities\Track;
use Src\Domain\Exceptions\TrackNotFoundException;
use Src\Domain\Repositories\TrackRepositoryInterface;
use Src\Domain\ValueObjects\TrackIdVO;

readonly class GetTrackByIdUseCase
{
    /**
     * @param TrackRepositoryInterface $trackRepository
     */
    public function __construct(
        private TrackRepositoryInterface $trackRepository,
    ){}

    /**
     * @param GetTrackByIdDTO $dto
     * @return Track
     * @throws TrackNotFoundException
     * @throws InvalidArgumentException
     */
    public function __invoke(GetTrackByIdDTO $dto): Track
    {
        $trackId = new TrackIdVO($dto->getTrackId());
        return $this->trackRepository->findById($trackId);
    }
}
