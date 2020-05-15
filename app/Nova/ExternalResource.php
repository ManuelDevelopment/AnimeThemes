<?php

namespace App\Nova;

use App\Enums\ResourceType;
use App\Rules\ResourceTypeDomain;
use BenSampo\Enum\Rules\EnumValue;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use SimpleSquid\Nova\Fields\Enum\Enum;

class ExternalResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\ExternalResource::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'link';

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static function group() {
        return __('nova.wiki');
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'link'
    ];

    public static function label()
    {
        return __('nova.external_resources');
    }

    public static function singularLabel()
    {
        return __('nova.external_resource');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('nova.id'), 'resource_id')
                ->sortable(),

            Enum::make(__('nova.type'), 'type')
                ->attachEnum(ResourceType::class)
                ->sortable()
                ->rules('required', new EnumValue(ResourceType::class, false))
                ->help(__('nova.resource_type_help')),

            Text::make(__('nova.link'), 'link')
                ->sortable()
                ->rules('required', 'max:192', 'url', new ResourceTypeDomain($request->input('type')))
                ->creationRules('unique:resource,link')
                ->updateRules('unique:series,link,{{resourceId}},resource_id')
                ->help(__('nova.resource_link_help')),

            Text::make(__('nova.label'), 'label')
                ->sortable()
                ->rules('nullable', 'max:192')
                ->help(__('nova.resource_label_help')),

            BelongsToMany::make(__('nova.artists'), 'Artists')
                ->searchable(),

            BelongsToMany::make(__('nova.anime'), 'Anime')
                ->searchable(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
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
