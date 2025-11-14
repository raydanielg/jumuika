<?php

namespace App\Http\Middleware;

use App\Models\NewsItem;
use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        $news = NewsItem::query()
            ->where('is_active', true)
            ->orderByDesc('created_at')
            ->first();

        return [
            ...parent::share($request),
            'auth' => [
                'user' => $request->user(),
            ],
            'news' => $news ? [
                'title' => $news->title,
                'url' => $news->url,
                'audience' => $news->audience,
            ] : null,
        ];
    }
}
