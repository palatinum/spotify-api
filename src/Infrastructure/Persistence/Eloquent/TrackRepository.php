<?php

namespace Src\Infrastructure\Persistence\Eloquent;

use Src\Domain\Entities\Track;
use App\Models\SpotifySong;
use Src\Domain\Exceptions\TrackNotFoundException;
use Src\Domain\Repositories\TrackRepositoryInterface;
use Src\Domain\ValueObjects\ArtistVO;
use Src\Domain\ValueObjects\NameVO;
use Src\Domain\ValueObjects\TrackIdVO;

class TrackRepository implements TrackRepositoryInterface
{
    /**
     * @param TrackIdVO $trackId
     * @return Track
     */
    public function findById(TrackIdVO $trackId): Track
    {
        $model = SpotifySong::find($trackId->getValue());
        if(!$model) {
            throw new TrackNotFoundException($trackId);
        }
        return new Track(
            $trackId,
            new NameVO($model->track_name),
            new ArtistVO($model->track_artist),
        );
    }
}
