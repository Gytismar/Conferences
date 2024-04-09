<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PhpParser\Node\Stmt\Return_;
use App\Http\Requests\StoreArticleRequest;

class ArticlesController extends Controller
{
    protected array $articles = [
        1 => ['title' => 'First article', 'content' => 'first content'],
        2 => ['title' => 'Second article', 'content' => 'second content']
    ];
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $articles = new Article();
        return view('articles.index', ['articles' => $articles->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request, Article $article): RedirectResponse
    {
        $validated = $request->validated();

        $articleItem = $article->create($validated);

        $request->session()->flash('status', 'Article created');

        return redirect()->route('articles.show', ['id' => $articleItem->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id) : View
    {
        //abort_if(!isset($this -> articles[$id]), 404);
        return view ('articles.show', ['article' => Article::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreArticleRequest  $request, string $id): RedirectResponse
    {
        $validated = $request->validated();;

        $article = Article::findOrFail($id);
        $article->update($validated);

        $request->session()->flash('status', 'Article updated successfully');

        return redirect()->route('articles.show', ['id' => $article->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): RedirectResponse
    {
        $article = (new Article())->findOrFail($id);
        $article->delete();

        session()->flash('status', 'Article deleted!');

        return redirect()->route('articles.index');
    }
}
