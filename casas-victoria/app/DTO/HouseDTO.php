<?php

namespace App\DTO;

Use App\Models\House;

class HouseDTO
{
    public string $id;
    public string $title;
    public ?string $description;
    public int $rooms;
    public int $bathrooms;
    public int $garages;
    public ?string $surface;
    public ?string $dimensions;
    public ?string $address;
    public ?string $latitude;
    public ?string $longitude;
    public ?string $photoUrl;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function loadHouseData(House $h)
    {
        $this->title = $h->title;
        $this->description = $h->description;
        $this->rooms = $h->bedrooms ?? 0;
        $this->bathrooms = $h->bathrooms ?? 0;
        $this->garages = $h->garages ?? 0;
        $this->surface = $h->surface;
        $this->dimensions = $h->dimensions;
        $this->address = $h->address;
        $this->latitude = $h->latitude;
        $this->longitude = $h->longitude;
    }
}
