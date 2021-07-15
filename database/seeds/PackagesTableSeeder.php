<?php

use Illuminate\Database\Seeder;
use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayPackage = config('packages');

        foreach ($arrayPackage as $item) {
            $package = new Package();

            $package->{'package_name'} = $item["package_name"];
            $package->city = $item["city"];
            $package->country = $item["country"];
            $package->type = $item["type"];
            $package->{'structure_name'} = $item["structure_name"];
            $package->{'structure_type'} = $item["structure_type"];
            $package->rating = $item["rating"];
            $package->{'price_night_person'} = $item["price_night_person"];
            $package->departure = $item["departure"];
            $package->return = $item["return"];
            $package->{'free_cancellation'} = $item["free_cancellation"];
            $package->description = $item["description"];

            $package->save();
        }
    }
}
