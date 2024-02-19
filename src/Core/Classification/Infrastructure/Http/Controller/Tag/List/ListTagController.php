<?php

declare(strict_types=1);

namespace Core\Classification\Infrastructure\Http\Controller\Tag\List;

use App\Http\Controllers\Controller;
use Core\Classification\Application\Tag\GetAll\GetAllTagsUseCase;
use Illuminate\View\View;

class ListTagController extends Controller
{
    public function __construct(private GetAllTagsUseCase $service)
    {

    }

    public function __invoke(): View
    {
        $tags = $this->service->execute();

        return view('tags.index', compact('tags'));
    }
}
