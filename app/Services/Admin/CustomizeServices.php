<?php

namespace App\Services\Admin;

use App\Models\CustomizeOption;
use Illuminate\Http\Request;

class CustomizeServices
{

    /**
     * createOrUpdate the specified resource in storage.
     *
     * @param  Request $request
     * @param  string $option
     * @return bool
     */
    public function createOrUpdate(Request $request, string $option) : bool
    {
        if ($option === 'header') {
            $all = $request->only('logo', 'alt_text', 'logo_width', 'logo_height', 'facebook', 'twitter', 'linkedin', 'instagram');
        }
        else if ($option === 'footer') {
            $all = $request->only('logo', 'alt_text', 'logo_width', 'logo_height', 'about_company', 'copy_right_text');
        }
        else if ($option === 'home') {
            $all = $request->only(
                'banner_ads_url_1', 'banner_ads_image_1', 'banner_ads_url_2', 'banner_ads_image_2',
                'banner_ads_url_3', 'banner_ads_image_3', 'sidebar_ads_url_1', 'sidebar_ads_image_1',
                'sidebar_ads_url_2', 'sidebar_ads_image_2', 'sidebar_ads_url_3', 'sidebar_ads_image_3',
                'sidebar_ads_url_4', 'sidebar_ads_image_4'
            );
        }
        else if ($option === 'post') {
            $all = $request->only(
                'banner_ads_url_1', 'banner_ads_image_1', 'banner_ads_url_2', 'banner_ads_image_2',
                'banner_ads_url_3', 'banner_ads_image_3', 'sidebar_ads_url_1', 'sidebar_ads_image_1',
                'sidebar_ads_url_2', 'sidebar_ads_image_2', 'sidebar_ads_url_3', 'sidebar_ads_image_3'
            );
        }
        else if ($option === 'taxonomy') {
            $all = $request->only(
                'banner_ads_url_1', 'banner_ads_image_1', 'banner_ads_url_2', 'banner_ads_image_2',
                'sidebar_ads_url_1', 'sidebar_ads_image_1', 'sidebar_ads_url_2', 'sidebar_ads_image_2',
                'sidebar_ads_url_3', 'sidebar_ads_image_3'
            );
        }

        $customize = CustomizeOption::updateOrCreate(
            ['key' => $option],
            ['value' => json_encode($all)]
        );
        return !!$customize;
    }

}
