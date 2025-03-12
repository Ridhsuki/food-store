<?php

namespace App\Livewire\Web\Home;

use App\Models\Slider;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class Index extends Component
{    
    protected function getPopularProducts()
    {
        return Product::with('category', 'ratings.customer')
            ->withAvg('ratings', 'rating') // Menghitung rata-rata rating
            ->having('ratings_avg_rating', '>=', 4)
            ->limit(5)
            ->get();
    }

    public function render()
    {
        return view('livewire.web.home.index', [

            //get sliders
            'sliders' => Slider::latest()->get(),

            //get categories
            'categories' => Category::latest()->get(),

            //get popular products
            'popularProducts' => $this->getPopularProducts(),
            
        ]);
    }
}