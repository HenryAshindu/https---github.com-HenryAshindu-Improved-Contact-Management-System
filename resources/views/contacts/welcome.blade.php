<x-layout>
    <x-page-heading>Home Page</x-page-heading>

<section>
 
      <!-- Main Container -->
  <div class="min-h-screen flex flex-col mt-4">
     <center>
      <h3 class="font-bold text-xl">Overview</h3>
     </center>

    <!-- Dashboard Content -->
    <div class="flex-grow p-6 max-w-7xl mx-auto">
      <!-- Three Column Grid Layout -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
        
        <!-- Column 1: Example Card (Statistics) -->
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h2 class="text-lg font-semibold text-gray-700 mb-4">Total Contacts</h2>
          <p class="text-4xl font-bold text-indigo-600">{{ $totalContacts }}</p>
          <p class="text-gray-500 mt-2">Manage your contacts easily.</p>
        </div>

        <!-- Column 3: Example Card (Quick Actions) -->
        <div class="bg-white rounded-lg shadow-lg p-6">
          <h2 class="text-lg font-semibold text-gray-700 mb-4">Quick Actions</h2>
          <div class="space-y-3">
            <a href="/contacts/create" class="block bg-indigo-500 text-white text-center py-2 rounded-md hover:bg-indigo-600">Add New Contact</a>
          </div>
        </div>

      </div>
    </div>

  <div>
    <center>
      <h1 class="font-bold text-xl">These are the Contacts</h1>
      <table class="min-w-full bg-gray-100 border border-black-200 rounded-lg shadow-lg mt-6">
        <!-- Table Head -->
        <thead class="bg-gray-200">
          <tr>
            <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700 border-b">NAME</th>
            <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700 border-b">EMAIL</th>
            <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700 border-b">GENDER</th>
            <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700 border-b">PHONE NUMBER</th>
            <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700 border-b">EDIT</th>
            <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700 border-b">DELETE</th>
          </tr>
        </thead>
    
        <!-- Table Body -->
        <tbody>
          @foreach ($contacts as $contact)
          <tr class="border-b border-gray-200">
            <td class="py-4 px-6 text-sm text-gray-700">{{$contact->name}}</td>
            <td class="py-4 px-6 text-sm text-gray-700">{{$contact->email}}</td>
            <td class="py-4 px-6 text-sm text-gray-700">{{$contact->gender}}</td>
            <td class="py-4 px-6 text-sm text-gray-700">{{$contact->phone}}</td>
            <td class="py-4 px-6 text-sm text-indigo-600">
              <a href="{{route('edit', ['contact'=>$contact])}}" class="hover:underline">Edit</a>
            </td>
            <td class="py-4 px-6 text-sm">
              <form action="{{route('delete', ['contact'=>$contact])}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="text-red-600 hover:underline cursor-pointer">
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </center>
    
  </div>
</section>

      
</x-layout>