<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    <ul>
    <ul class="text-white space-y-3">
      @foreach ($jobs as $job)
       <li>
           <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline"> 
              <strong>{{$job['title']}}:</strong> location {{$job['location']}}
           </a>  
       </li>

      @endforeach
    </ul>   
</x-layout>
