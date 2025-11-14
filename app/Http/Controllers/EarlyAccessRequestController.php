<?php

namespace App\Http\Controllers;

use App\Models\EarlyAccessRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class EarlyAccessRequestController extends Controller
{
    public function create(Request $request): Response
    {
        return Inertia::render('EarlyAccessRequest', [
            'sourcePage' => $request->query('source', 'accommodations'),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'accommodation_name' => ['required', 'string', 'max:255'],
            'website_url' => ['nullable', 'url'],
            'notes' => ['nullable', 'string'],
            'source_page' => ['nullable', 'string', 'max:255'],
        ]);

        EarlyAccessRequest::create($validated);

        return redirect()->route('early-access.thank-you');
    }
}

