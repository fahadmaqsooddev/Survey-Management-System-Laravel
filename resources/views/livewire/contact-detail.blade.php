<div>
    <ul class="contact_info_list style_2 ps-lg-4 unordered_list_block">
        <li>
            <strong>Phone:</strong>
            <span>{{ $contact_detail->phone }}</span>
        </li>
        <li>
            <strong>Email:</strong>
            <span><a href="mailto:{{ $contact_detail->email }}">Email Us</a></span>
        </li>
        <li>
            <img src="{{ $contact_detail->monitoring_setup_image }}" class="img img-responsive" style="height:400px" alt="Contact Image">
        </li>
    </ul>
</div>