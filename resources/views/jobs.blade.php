<x-layout heading="JOB">

    <h1>Job list</h1>
    <ul>
        @foreach ($jobs as $job )
            <li>
                <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
                    <strong class="text-orange-500">{{$job['title']}}</strong> : Pay {{$job['salary']}} per year.
                </a>
            </li>

        @endforeach
    </ul>
</x-layout>