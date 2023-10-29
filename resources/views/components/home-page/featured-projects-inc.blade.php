<div class="row g-4">
    <div class="col-md-6 col-xl-4">
        <x-blog.related-projects-card :project="$projects[0]" cardstyle="Home_featured_projects_card"  />
    </div>

    <div class="col-xl-4 order-md-3 order-xl-2">
        <div class="row g-4">
            <div class="col-md-6 col-xl-12">
                <x-blog.related-projects-card :project="$projects[1]" cardstyle="" />
            </div>
            <div class="col-md-6 col-xl-12">
                <x-blog.related-projects-card :project="$projects[2]" cardstyle="" />
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4 order-xl-3">
        <x-blog.related-projects-card :project="$projects[3]" cardstyle="Home_featured_projects_card"  />
    </div>
</div>
