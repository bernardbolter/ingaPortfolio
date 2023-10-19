var allProjects = []
var filteredProjects = []
var breakpoint = 780

jQuery(document).ready(function($) {
    async function loadProjects() {
        allProjects = await wp.apiRequest({ path: 'wp/v2/posts?_embed'})
        filteredProjects = allProjects 
        displayAllProjects(filteredProjects)
    }
    loadProjects()
})

var displayAllProjects = projects => {
    var shuffledProjects = shuffle(projects)
    var projectsString = ''
    shuffledProjects.map((project, i) => {
        console.log(project)
        projectsString = projectsString + `<a class="project-container" href="${project.link}"><img src="${project.fimg_url}" alt="project thumbnail for ${project.title.rendered}" /></a>`
    })
    jQuery('#projects-container').html(projectsString)
}

// HELPERS

function shuffle(array) {
    let currentIndex = array.length,  randomIndex;
  
    // While there remain elements to shuffle.
    while (currentIndex > 0) {
  
      // Pick a remaining element.
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex--;
  
      // And swap it with the current element.
      [array[currentIndex], array[randomIndex]] = [
        array[randomIndex], array[currentIndex]];
    }
  
    return array;
  }
