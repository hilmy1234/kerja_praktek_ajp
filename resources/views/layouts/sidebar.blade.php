<div class="col-md-4">
    <aside class="right-sidebar">
        <div class="search-widget">
            <form method="get" action="{{url("search")}}">
                <div class="input-group">
                    <input type="text" name="q" class="form-control input-lg" placeholder="Search for...">
                    <span class="input-group-btn">
                        <form method="get" action="{{url("search")}}">
                            <button class="btn btn-lg btn-default" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                          </span>
                </div><!-- /input-group -->
            </form>
        </div>

        <div class="widget">
            <div class="widget-heading">
                <h4>Categories</h4>
            </div>
            @foreach($categories as $category)
            <div class="widget-body">
                <ul class="categories">
                  <a href="{{ url("category/$category->id/".str_slug($category->name)) }}">{{$category->name}}</a>
                </ul>
            </div>
            @endforeach
        </div>
    </aside>
</div>