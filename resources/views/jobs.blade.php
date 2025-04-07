<x-layout heading="JOB">

    <h1>Job list</h1>

    <div class="space-y-4">
        @foreach ($jobs as $job )

                <a href="/jobs/{{$job['id']}}" class=" block px-4 py-6 border border-gray-200 rounded-lg">
                    <div class="font-bold text-sm"> {{ $job->employer->name }}</div>
                    <div>
                        <strong class="text-orange-500">{{$job->title}}</strong> : Pay {{$job->salary}} per year.
                    </div>

                </a>


        @endforeach
        <div>
            {{$jobs->links()}}
        </div>
    </div>
</x-layout>