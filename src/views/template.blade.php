<div class="modal-dialog @yield('modal-size')">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            @yield('modal-header')

        </div>
        <div class="modal-body">
            @yield('modal-body')
        </div>
    </div>
</div>