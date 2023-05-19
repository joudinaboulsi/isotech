<div class="modal" id="project-{{ $p->id }}" tabindex="-1" role="dialog" aria-labelledby="projectModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <div class="row display-flex">
                    <div class="col-sm-6 col-xs-12 col-3">
                        <img src="/images/portfolio/{{ $p->image }}" class="img-responsive"
                            alt="{{ $p->title }}">
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <h4 class="modal-title mgt-15" id="projectModal">
                            {{ $p->title }}
                            <h5>{{ $p->type }}</h5>
                        </h4>
                        {!! $p->text !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
