<div>

            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Status</th>
                     
                    </tr>
                  </thead>
                  @foreach ($students as $student)
                  
                  <tbody>
                  
                    <tr>
                      <td>183</td>
                      <td><livewire:student-single  :student="$student" :key="$student->id"/></td>
                    
                      <td><span class="tag tag-success">Approved</span></td>
                     
                    </tr>
                    
                  </tbody>
                  @endforeach
                </table>
            </div>
</div>
