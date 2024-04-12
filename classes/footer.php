<?php
class footer
{
    public function __toString(){    
        return <<<HTML
            <footer class="bg-white w-100 global-footer px-3 py-4 d-flex justify-content-between">
                <div>Bonded &amp; Insured. CCB #69696969</div>
                <div>&copy; Centerline Design &amp; Build 2024</div>
            </footer>
            <script 
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
                crossorigin="anonymous"
            >
            </script>
            <script src="./../assets/index.js"></script>
        HTML;
    }
}