<?php 

class trackServices{

    private $tracks; 

    public function fetchTracks()
    {
        $this->tracks = $this->tracks ? $this->tracks : file_get_contents('../../data/tracks.json');
        return $this->tracks;
    }

    public function getDownloadPass($trackTitle = null)
    {
        if($track = $this->getTrack($trackTitle)){
            return $track->pass;
        }
        return false;
    }

    public function getTrack($trackTitle)
    {
        $this->fetchTracks();
        foreach((array)json_decode($this->tracks) as  $track){
            if($track->title == $trackTitle){
                return $track;
            }
        }
        return null;
    }

}



?>