@extends('makets.admin.app')
    @section('customizer')
        

<div class="customizer">
    <div class="handle" (click)="isOpen = !isOpen">
        <i class="i-Gear spin"></i>
    </div>
    <div class="customizer-body" data-perfect-scrollbar data-suppress-scroll-x="true">
        <div class="accordion" id="accordionCustomizer">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <p class="mb-0">
                        Sidebar Layout
                    </p>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingThree"
                    data-parent="#accordionCustomizer">
                    <div class="card-body">

                        <div class="">
                            <a title="Compact Sidebar" href="large-compact-sidebar/dashboard/dashboard1.html" class="btn btn-primary"> Compact
                                Sidebar </a>
                            <a title="Horizontal Layout" href="horizontal-bar/dashboard/dashboard1.html" class="btn btn-primary">
                                Horizontal Layout </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <p class="mb-0">
                        RTL
                    </p>
                </div>

                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionCustomizer">
                    <div class="card-body">
                        <label class="checkbox checkbox-primary">
                            <input type="checkbox" id="rtl-checkbox">
                            <span>Enable RTL</span>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>

            
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <p class="mb-0">
                        Dark Version
                    </p>
                </div>

                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionCustomizer">
                    <div class="card-body">
                        <label class="checkbox checkbox-primary">
                            <input type="checkbox" id="dark-checkbox">
                            <span>Enable Dark Mode</span>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</div>
@endsection