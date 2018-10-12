<?php

namespace App\Nova;

use Carbon\Carbon;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\TextArea;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Country;

class Site extends Resource
{


    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Site';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',

    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Site Name', 'name')->rules('required')->sortable(),
            BelongsTo::make('Client')->sortable(),
            Number::make('client_id')->hideFromIndex(),
            Number::make('contact_id')->sortable(),
            Text::make('phone_number')->rules('required'),
            $this->addressFields(),
            //Text::make('street_address')->rules('required')->sortable(),
            //Text::make('city')->rules('required')->sortable(),
            //Text::make('state')->rules('required')->sortable(),
            //Text::make('zip')->rules('required')->sortable(),
            //DateTime::make('time_opens_at')->format('H:i:s')->sortable(),
            //DateTime::make('time_closes_at')->sortable(),
            DateTime::make('time_opens_at')->format('hA')->sortable(),
            DateTime::make('time_closes_at')->format('hA')->sortable(),
            DateTime::make('Updated At')->hideFromIndex(),
            DateTime::make('Created At')->hideFromIndex(),


        ];
    }
/**
 * Get the address fields for the resource.
 *
 * @return \Illuminate\Http\Resources\MergeValue
 */
protected function addressFields()
{
    return $this->merge([
        Place::make('Address', 'street_address')->postalCode('zip')->hideFromIndex(),
        //Text::make('Address Line 2')->hideFromIndex(),
        Text::make('city')->hideFromIndex(),
        Text::make('state')->hideFromIndex(),
        Text::make('zip')->hideFromIndex(),
        Country::make('Country')->hideFromIndex(),
    ]);
}
    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [
            (new Metrics\NumberOfSites)->width('1/4'),
            //(new Metrics\TimeOpensAtPerSite)->width('1/2'),

            ]

        ;
        //return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
