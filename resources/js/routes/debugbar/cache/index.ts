import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../wayfinder'
/**
* @see \Fruitcake\LaravelDebugbar\Controllers\CacheController::deleteMethod
 * @see vendor/barryvdh/laravel-debugbar/src/Controllers/CacheController.php:16
 * @route '/_debugbar/cache'
 */
export const deleteMethod = (options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: deleteMethod.url(options),
    method: 'delete',
})

deleteMethod.definition = {
    methods: ["delete"],
    url: '/_debugbar/cache',
} satisfies RouteDefinition<["delete"]>

/**
* @see \Fruitcake\LaravelDebugbar\Controllers\CacheController::deleteMethod
 * @see vendor/barryvdh/laravel-debugbar/src/Controllers/CacheController.php:16
 * @route '/_debugbar/cache'
 */
deleteMethod.url = (options?: RouteQueryOptions) => {
    return deleteMethod.definition.url + queryParams(options)
}

/**
* @see \Fruitcake\LaravelDebugbar\Controllers\CacheController::deleteMethod
 * @see vendor/barryvdh/laravel-debugbar/src/Controllers/CacheController.php:16
 * @route '/_debugbar/cache'
 */
deleteMethod.delete = (options?: RouteQueryOptions): RouteDefinition<'delete'> => ({
    url: deleteMethod.url(options),
    method: 'delete',
})

    /**
* @see \Fruitcake\LaravelDebugbar\Controllers\CacheController::deleteMethod
 * @see vendor/barryvdh/laravel-debugbar/src/Controllers/CacheController.php:16
 * @route '/_debugbar/cache'
 */
    const deleteMethodForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: deleteMethod.url({
                    [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                        _method: 'DELETE',
                        ...(options?.query ?? options?.mergeQuery ?? {}),
                    }
                }),
        method: 'post',
    })

            /**
* @see \Fruitcake\LaravelDebugbar\Controllers\CacheController::deleteMethod
 * @see vendor/barryvdh/laravel-debugbar/src/Controllers/CacheController.php:16
 * @route '/_debugbar/cache'
 */
        deleteMethodForm.delete = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: deleteMethod.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'DELETE',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'post',
        })
    
    deleteMethod.form = deleteMethodForm
const cache = {
    delete: Object.assign(deleteMethod, deleteMethod),
}

export default cache