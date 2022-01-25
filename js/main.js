const nav = document.querySelector('.nav__items')
const navBtn = document.querySelector('.nav__burger-btn')
const allNavItems = document.querySelectorAll('.nav__item')

// filters project
const allFilterItems = document.querySelectorAll('.projects__filter')
const allFilterCards = document.querySelectorAll('.projects__card-box')

function handleNav() {
	nav.classList.toggle('nav__items--active')
	handleNavItemsAnimation()
}
function handleActiveNav() {
	nav.classList.remove('nav__items--active')
	allNavItems.forEach(item => {
		item.classList.remove('active')
	})

	this.classList.add('active')
}

function handleNavItemsAnimation() {
	let delayTime = 0

	allNavItems.forEach(item => {
		console.log(item)
		item.classList.toggle('nav-items-animation')
		item.style.animationDelay = `.${delayTime}s`
		delayTime += 1
	})
}

function handleFilters() {
	allFilterItems.forEach(element => {
		element.classList.remove('projects__filter--active')
	})
	this.classList.add('projects__filter--active')
	const filterItem = this.dataset.filter

	allFilterCards.forEach(item => {
		const findFilterItems = item.dataset.filter
		item.style.display = 'none'

		console.log()
		if (findFilterItems.includes(filterItem)) {
			item.style.display = 'block'
		}
	})
}

navBtn.addEventListener('click', handleNav)

allNavItems.forEach(item => {
	item.addEventListener('click', handleActiveNav)
})
allFilterItems.forEach(item => {
	item.addEventListener('click', handleFilters)
})
