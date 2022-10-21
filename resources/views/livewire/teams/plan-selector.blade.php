<div>
    <select data-role="plan-selector">
        @foreach ($plans as $plan)
            <option value="{{ $plan->id }}">
                {{ $plan->name }}
            </option>
        @endforeach

    </select>
</div>
