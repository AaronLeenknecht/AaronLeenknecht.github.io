<?php

// <img src="/../assets/img/brand.jpeg" alt="" width="100" height="100" style="mix-blend-mode: multiply;">
class navbar {
    public function __toString(){    
        return <<<HTML
            <nav class="navbar navbar-expand-lg sticky-top navbar-white bg-white">
                <div class="container-fluid">
                    <a class="navbar-brand text-center" href="#">Centerline</a>
                    <button 
                        class="navbar-toggler" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#navbarTogglerDemo02" 
                        aria-controls="navbarTogglerDemo02" 
                        aria-expanded="false" 
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        HTML;
    }
}