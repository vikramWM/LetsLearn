@extends('layouts.app')

@section('content')
<style>
        .tab-content {
            display: none;
        }
        .active-tab {
            display: block;
        }
        .selected-tab {
            color: red; /* Change the background color to your desired color */
        }
    </style>
<section class="testimonial-section-four">
		<div class="top-pattern-layer" style="background-image:url(images2/background/pattern-20.png)"></div>
		<div class="bottom-pattern-layer" style="background-image:url(images2/background/pattern-20.png)"></div>
		<div class="icon-layer-one" style="background-image:url(images2/icons/icon-22.png)"></div>
		<div class="icon-layer-two" style="background-image:url(images2/icons/icon-22.png)"></div>
		<div class="auto-container">
			<div class="sec-title-two centered">
				<div class="title">Orders</div>
				<div class="row text-center justify-content-center">
                    <div class="col-3 title mr-5">
                        <li onclick="openTab('assignment-tab', this)">Assignment Orders</li>
                    </div>
                    <div class="col-3 title mr-5">
                        <li onclick="openTab('course-tab', this)">Course Orders</li>
                    </div>
                </div>

                <div id="assignment-tab" class="tab-content">
                    <!-- Content for Assignment Orders -->
                    <table>
                        <div class="inner-container">
                            <div class="testimonial-block-four">
                                <div class="inner-box" style="background-image:url(images2/background/pattern-21.png)">
                                </div>
                            </div>
                        </div>
                    </table>
                </div>

                <div id="course-tab" class="tab-content">
                    <!-- Content for Course Orders -->
                    <table>
                        <div class="inner-container">
                            <div class="testimonial-block-four">
                                <div class="inner-box" style="background-image:url(images2/background/pattern-21.png)">
                                </div>
                            </div>
                        </div>
                    </table>
                </div>
			</div>
		</div>
	</section>
    <script>
        function openTab(tabId, element) {
            // Remove the 'selected-tab' class from all tabs
            var tabs = document.querySelectorAll('.title li');
            tabs.forEach(tab => {
                tab.classList.remove('selected-tab');
            });

            // Add the 'selected-tab' class to the clicked tab
            element.classList.add('selected-tab');

            // Hide all tabs
            var tabContents = document.getElementsByClassName("tab-content");
            for (var i = 0; i < tabContents.length; i++) {
                tabContents[i].style.display = 'none';
            }

            // Show the selected tab content
            document.getElementById(tabId).style.display = 'block';
        }
    </script>
    
@endsection