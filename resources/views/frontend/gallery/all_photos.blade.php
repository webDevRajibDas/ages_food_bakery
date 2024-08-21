@extends('frontend.layouts.app')

@section('title')
All Photos - {{ app_name() }}
@endsection

@section('content')

<section class="page-header page-header-modern bg-color-tertiary page-header-md">
	<div class="container">
		<div class="row">
			<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
				<h1 class="font-semibold"><strong>Gallery</strong></h1>
			</div>
			<div class="col-md-4 order-1 order-md-2 align-self-center">
				<ul class="breadcrumb d-block text-md-right breadcrumb-light">
					<li><a href="#">Home</a></li>
					<li class="active">Photo Gallery</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!--  Section -->


<div class="container my-4">
    <div class="gallery">
        <!-- Gallery items using dummy images -->
        @foreach($photos as $photo)
            <a href="{{asset($photo->image)}}" data-lightbox="gallery" data-title="{{ $photo->name }}">
                <img src="{{ asset($photo->image)}}" class="gallery-item img-fluid img-thumbnail-hover-icon img-thumbnail" alt="{{ $photo->name }}">
            </a>
        @endforeach

    </div>
</div>
<button id="lb-close" class="lb-close">Close</button>

@endsection

@push('after-styles')
    <style>

        .gallery {
            column-count: 4; /* Masonry columns: 4 columns */
            column-gap: 1rem;
        }

        .gallery-item {
            break-inside: avoid;
            margin-bottom: 1rem;
            width: 100%;
            transition: transform 0.2s;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        @media (max-width: 992px) {
            .gallery {
                column-count: 3;
            }
        }

        @media (max-width: 768px) {
            .gallery {
                column-count: 2;
            }
        }

        @media (max-width: 576px) {
            .gallery {
                column-count: 1;
            }
        }

        .lb-close {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            z-index: 1001;
            display: none; /* Initially hidden */
        }
    </style>
@endpush

@push('after-scripts')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const lazyImages = document.querySelectorAll('img[data-src]');
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.getAttribute('data-src');
                        img.removeAttribute('data-src');
                        observer.unobserve(img);
                    }
                });
            });

            lazyImages.forEach(image => {
                imageObserver.observe(image);
            });

            // Add custom close button functionality
            const lbCloseButton = document.getElementById('lb-close');
            lightbox.option({
                'wrapAround': true,
                'fadeDuration': 300
            });

            document.addEventListener('lightbox-start', function() {
                lbCloseButton.style.display = 'block';
            });

            lbCloseButton.addEventListener('click', function() {
                lightbox.end();
                lbCloseButton.style.display = 'none';
            });

            document.addEventListener('lightbox-end', function() {
                lbCloseButton.style.display = 'none';
            });
        });
    </script>

@endpush


