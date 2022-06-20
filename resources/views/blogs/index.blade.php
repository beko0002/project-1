<form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
<div class="hero-body">
            <div class="container">
                <p class="title is-2">Blog</p>
                <p class="subtitle is-3">The latest Post</p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="content">

                        <div class="has-text-right">
                            <a href="/blogs/create" class="button is-primary">Add a new Blog...</a>
                        </div>

                        <div class="column is-12">
                            @foreach($blogs as $blog)
                                <div class="panel" >
                                <a class="panel-block" href="{{ route('blogs.show', $blog) }}">
                                        <article class="media">
                                            <figure class="media-left">
                                            </figure>
                                            <div class="media-content">
                                                <div class="content">
                                                    <p>
                                                        <strong>{{ $blog->title }}</strong>
                                                        <br>
                                                        <small>{{ $blog->body }}</small>
                                                        <br>
                                                    </p>
                                                    <div class="field has-addons">
                                                        <p class="control">
                                                            <a href="{{route('blogs.edit', $blog)}}" class="button">
                                                             <span class="icon is-small">
                                                                  <i class="fa-solid fa-pen-to-square"></i>
                                                             </span>
                                                            </a>
                                                        </p>
                                                        <div class="field has-addons">
                                                        <p class="control">
                                                            <a href="{{route('blogs.edit', $blog)}}" class="button">
                                                             <span class="icon is-small">
                                                                  <i class="fa-solid fa-pen-to-square"></i>
                                                             </span>
                                                            </a>
                                                        </p>
                                                        <p class="control">
                                                        <form method="POST" action="{{ route('blogs.destroy', $blog) }}">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="button">
                                                                delete
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </button>
                                                        </form>
                                                        </a>
                                                            <a href="{{ route('blogs.edit',$blog) }}">Edit</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
