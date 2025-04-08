<x-layout heading="JOB">



    <div class="space-y-4">
        <h1 class="text-center text-amber-600 text-2xl">Job list</h1>
        <a href="/jobs/create"  class="rounded-md bg-amber-600 px-3 py-2  text-sm font-semibold text-white shadow-xs hover:bg-amber-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">CREATE A NEW JOB</a>
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