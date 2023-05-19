<a class="portfolio-home2-item" href="#" data-toggle="modal" data-target="#project-{{ $p->id }}">
    <img src="/images/portfolio/{{ $p->image }}" class="img-responsive" alt="{{ $p->title }}">
    <div class="overlay">
        <div class="content">
            <h4>{{ $p->title }}</h4>
            <span>{{ $p->type }}</span>
            {!! $p->text !!}
        </div>
    </div>
</a>
