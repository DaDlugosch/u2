@php
    $heading = get_field('tour_heading');
    $quote = get_field('tour_quote');
    $tickets = get_field('tickets');
@endphp

<section class="tour" id="{!! get_field('tour_id', 'option') !!}">
    <h1>{{ $heading }}</h1>
    {!! $quote !!}
    @if(!empty($tickets))
    <table>
        <thead>
            <tr class="row">
                <th class="col-2">Date</th>
                <th class="col-8">Location</th>
                <th class="col-2">Ticket</th>
            </tr>
        </thead>
        <tbody>
        @if(have_rows('tickets'))
	        <?php while(have_rows('tickets')): the_row();
	            $date = get_sub_field('ticket_date');
	            $location = get_sub_field('ticket_location');
	            $link = get_sub_field('ticket_link');
	        ?>
                <tr class="row">
                    <td class="col-2">{{ $date }}</td>
                    <td class="col-8">{{ $location }}</td>
                    <td class="col-2">
                        @if(!empty($link))
                            <a href="{{ $link }}" target="_blank"><i class="fas fa-ticket-alt"></i></a>
                        @else
                            SOLD OUT
                        @endif
                    </td>
                </tr>
            <?php endwhile; ?>
        @endif
        </tbody>
    </table>
    @endif
</section>