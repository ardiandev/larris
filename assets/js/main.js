document.addEventListener("onload", () => {
    const navItems = document.querySelectorAll(".wp-block-navigation-item");
    navItems.forEach(item => {
        const links = item.querySelectorAll("a");
            links.forEach(link => {
                console.log(link)
                console.log(window.location.href)

                if (link === window.location.href) {
                    item.classList.add("is-active")
                }
            })
    })

})