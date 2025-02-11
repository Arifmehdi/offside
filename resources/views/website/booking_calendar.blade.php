@extends('website.layouts.app')

@section('content')
<!-- breadcrumb starts here -->
<div class="breadcrumb-wrapper">
    <div class="container">
        <h3 style="color:black">Book Slot - Event Scedule</h3>
        <div class="breadcrumb">
            <a href="{{ route('web.home') }}" style="color:black">Home</a>
            <span class="default"> /</span>
            <h4 style="color:black">Event Schedule</h4>
        </div>
    </div>
</div>
<!-- breadcrumb ends here -->
<div id="main">
    <!-- main-content starts here -->
    <div id="main-content">
        <section id="primary" class="content-full-width">
            <div class="dt-sc-hr-invisible"></div>
            <div class="dt-sc-hr-invisible"></div>
            <style>
                /* Make Calendar Full Width */
                #calendar-container {
                    margin: 20px auto;
                    padding: 20px;
                    background: white;
                    border-radius: 10px;
                    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                    width: 100%;
                }

                #calendar {
                    width: 100%;
                    max-width: 1200px;
                    /* Optional: Set Max Width */
                    margin: auto;
                }
            </style>

            <!-- Full-Width Calendar Section -->
            <div class="container-fluid">

                <!-- FullCalendar Container -->
                <div id="calendar-container">
                    <div id="calendar"></div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var calendarEl = document.getElementById('calendar');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'dayGridMonth',
                        selectable: true, // Allow date selection
                        height: 'auto', // Make it fit full screen width
                        dateClick: function(info) {
                            alert('Selected Date: ' + info.dateStr);
                        },
                        events: [{
                                title: 'Football Match',
                                start: '2024-02-15'
                            },
                            {
                                title: 'Team Meeting',
                                start: '2024-02-20'
                            }
                        ]
                    });
                    calendar.render();
                });
            </script>

            <!-- Events starts here -->

            <div class="dt-sc-hr-invisible-medium"></div>


            <div class="dt-sc-hr-invisible-large"></div>
        </section>
    </div>
    <!-- main-content ends here -->
</div>
@endsection