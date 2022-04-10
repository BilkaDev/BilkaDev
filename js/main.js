const nav = document.querySelector('.nav__items')
const navBtn = document.querySelector('.nav__burger-btn')
const allNavItems = document.querySelectorAll('.nav__item')
const navBtnBars = document.querySelector('.nav__burger-btn-bars')
const allSection = document.querySelectorAll('.section')

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
	if (window.innerWidth < 768) {
		handleNavItemsAnimation()
	}
}

function handleNavItemsAnimation() {
	let delayTime = 0

	allNavItems.forEach(item => {
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

		if (findFilterItems.includes(filterItem)) {
			item.style.display = 'block'
		}
	})
}

const handleObserver = () => {
	const currentSection = window.scrollY
	let currentSectionName = 'about'

	allSection.forEach((section, index) => {
		const sectionTop = section.offsetTop
		if (currentSection >= sectionTop - 60) {
			currentSectionName = section.getAttribute('id')
		}

		allNavItems.forEach(item => {
			item.classList.remove('active')
			if (item.getAttribute('href').slice(1) === currentSectionName) {
				item.classList.add('active')
			}

			if (section.childNodes[1].classList.contains('dark-block') && section.offsetTop <= currentSection - 150) {
				navBtnBars.classList.add('nav__burger-btn-bars--color')
			} else if (!section.childNodes[1].classList.contains('dark-block') && section.offsetTop <= currentSection + 60) {
				navBtnBars.classList.remove('nav__burger-btn-bars--color')
			}
		})
	})
}

navBtn.addEventListener('click', handleNav)

allNavItems.forEach(item => {
	item.addEventListener('click', handleActiveNav)
})
allFilterItems.forEach(item => {
	item.addEventListener('click', handleFilters)
})
window.addEventListener('scroll', handleObserver)
