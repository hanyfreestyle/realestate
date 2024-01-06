<div class="row g-4">
    <div class="col-md-6 col-xl-4">
{{--        <x-blog.related-projects-card :project="$projects[0]" cardstyle="Home_featured_projects_card"  />--}}
        <x-main-block.project-card-photo :project="$projects[0]" cardstyle="project_side_bar_home" />
    </div>

    <div class="col-xl-4 order-md-3 order-xl-2">
        <div class="row g-4">
            <div class="col-md-6 col-xl-12">
{{--                <x-blog.related-projects-card :project="$projects[1]" cardstyle="" />--}}
                <x-main-block.project-card-photo :project="$projects[1]" cardstyle="project_side_bar" />
            </div>
            <div class="col-md-6 col-xl-12">
{{--                <x-blog.related-projects-card :project="$projects[2]" cardstyle="" />--}}
                <x-main-block.project-card-photo :project="$projects[2]" cardstyle="project_side_bar" />
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4 order-xl-3">
{{--        <x-blog.related-projects-card :project="$projects[3]" cardstyle="Home_featured_projects_card"  />--}}
        <x-main-block.project-card-photo :project="$projects[3]" cardstyle="project_side_bar_home" />
    </div>
</div>



