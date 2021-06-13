@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li wire:click="previousPage">Previous</li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li wire:click="nextPage">Next</li>
        </ul>
    </nav>
@endif
