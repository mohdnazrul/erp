@extends('documentation.layout.app')
@push('style')

@endpush

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker@3.1.0/daterangepicker.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}">

@section('page-content')
    <div class="row g-3">
        <div class="col-12">
            <h5>Date Range Picker</h5>
            <p>Originally created for reports at <a class="link-primary" href="https://www.improvely.com">Improvely</a>, the
                Date Range Picker can be attached to any webpage element to pop up two calendars for selecting dates, times,
                or predefined ranges like "Last 30 Days".</p>
            <h6>For full documentation please check the <a class="link-primary" href="https://www.daterangepicker.com/"
                    target="_blank" class="fw-bold">plugin's site</a></h6>
        </div>
        <div class="col-12">
            <h5>Basic</h5>
            <input type="text" name="dates" class="form-control form-control-lg">
            <pre class="bg-card p-4 rounded-4 mt-2" data-lang="html"><code class=" language-html">&lt;script&gt;
    $(function() {
        $('input[name=&quot;dates&quot;]').daterangepicker({ startDate: moment(), endDate: moment().add(2, 'day')});
    })
&lt;/script&gt;
</code></pre>
        </div>
        <div class="col-12">
            <h5>Date Range Picker With Times</h5>
            <input type="text" name="datetimes" class="form-control form-control-lg">
            <pre class="bg-card p-4 rounded-4 mt-2" data-lang="html"><code class=" language-html">&lt;script&gt;
$(function() {
    $('input[name=&quot;datetimes&quot;]').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
            format: 'M/DD hh:mm A'
            }
        });
    });
&lt;/script&gt;
</code></pre>
        </div>
        <div class="col-12">
            <h5>Single Date Picker</h5>
            <input type="text" name="birthday" value="10/24/1985" class="form-control form-control-lg">
            <pre class="bg-card p-4 rounded-4 mt-2" data-lang="html"><code class=" language-html">&lt;script&gt;
    $(function() {
    $('input[name=&quot;birthday&quot;]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'),10)
        }, function(start, end, label) {
            var years = moment().diff(start, 'years');
            alert(&quot;You are &quot; + years + &quot; years old!&quot;);
        });
    });
&lt;/script&gt;
</code></pre>
        </div>
        <div class="col-12">
            <h5>Predefined Date Ranges</h5>
            <div class="align-items-center d-flex form-control form-control-lg gap-2" id="reportrange"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                    <path d="M16 3v4" />
                    <path d="M8 3v4" />
                    <path d="M4 11h16" />
                    <path d="M7 14h.013" />
                    <path d="M10.01 14h.005" />
                    <path d="M13.01 14h.005" />
                    <path d="M16.015 14h.005" />
                    <path d="M13.015 17h.005" />
                    <path d="M7.01 17h.005" />
                    <path d="M10.01 17h.005" />
                </svg><span></span></div>
            <pre class="bg-card p-4 rounded-4 mt-2" data-lang="html"><code class=" language-html">&lt;script&gt;
    $(function() {
        var start = moment().subtract(29, 'days');
        var end = moment();
        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
        cb(start, end);
    });
&lt;/script&gt;
</code></pre>
        </div>
    </div> <!-- .row end -->

@endsection
@push('scripts')

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker@3.1.0/daterangepicker.min.js"></script>

    <script>
        // basic
        $(function() {
            $('input[name="dates"]').daterangepicker({
                startDate: moment(),
                endDate: moment().add(2, 'day')
            });
        })
        // Date Range Picker With Times
        $(function() {
            $('input[name="datetimes"]').daterangepicker({
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'M/DD hh:mm A'
                }
            });
        });
        //Single Date Picker
        $(function() {
            $('input[name="birthday"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format('YYYY'), 10)
            }, function(start, end, label) {
                var years = moment().diff(start, 'years');
                alert("You are " + years + " years old!");
            });
        });
        // Predefined Date Ranges
        $(function() {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf('month')]
                }
            }, cb);
            cb(start, end);
        });
    </script>
@endpush
