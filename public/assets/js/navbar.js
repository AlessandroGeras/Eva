//Animações para abertura e fechamento do menu mobile em todas as páginas

const menu_click = (clicked_id) => {
    if (clicked_id == "menu_open") {
        let navbar_menu = document.getElementById("navbar_menu");
        navbar_menu.className =
            "mobile_open w-full h-full block text-black bg-sky-900 float-left lg:float-right lg:w-[800px] lg:bg-transparent dark:text-gray-200";

        let menu_open = document.getElementById("menu_open");
        menu_open.className = "menu_close hidden dark:text-gray-300";

        let menu_close = document.getElementById("menu_close");
        menu_close.className = "menu_open dark:text-gray-300";

        let index_logo = document.getElementById("index_logo");
        if (index_logo) {
            index_logo.className =
                "inline-block w-full h-40 mt-0 bg-zinc-900 sm:h-52 lg:mt-0 dark:bg-sky-900";
        }

        let lectures_title = document.getElementById("lectures_title");
        if (lectures_title) {
            lectures_title.className = "mt-0 inline-block w-full lg:mt-0";
        }

        let lecture_title = document.getElementById("lecture_title");
        if (lecture_title) {
            lecture_title.className = "mt-0 inline-block w-full lg:mt-0";
        }

        let my_account = document.getElementById("my_account");
        if (my_account) {
            my_account.className =
                "mt-0 inline-block w-full text-black text-center text-xs sm:text-base lg:mt-0 dark:text-gray-200";
        }

        let table_container = document.getElementById("table_container");
        if (table_container) {
            table_container.className =
                "mt-0 inline-block w-full text-black text-center lg:mt-0";
        }

        let appointment = document.getElementById("appointment");
        if (appointment) {
            appointment.className =
                "mt-0 inline-block w-full text-black text-center text-xs sm:text-base lg:mt-0 dark:text-gray-200";
        }
    } else {
        let navbar_menu = document.getElementById("navbar_menu");
        navbar_menu.className =
            "mobile_close w-full h-full block text-black bg-sky-900 float-left lg:float-right lg:w-[800px] lg:bg-transparent dark:text-gray-200";

        let menu_open = document.getElementById("menu_open");
        menu_open.className = "menu_open dark:text-gray-300";

        let menu_close = document.getElementById("menu_close");
        menu_close.className = "menu_close hidden dark:text-gray-300";

        let index_logo = document.getElementById("index_logo");
        if (index_logo) {
            index_logo.className =
                "inline-block w-full -mt-24 h-40 bg-zinc-900 sm:h-52 lg:mt-0 dark:bg-sky-900";
        }

        let lectures_title = document.getElementById("lectures_title");
        if (lectures_title) {
            lectures_title.className = "-mt-24 inline-block w-full lg:mt-0";
        }

        let lecture_title = document.getElementById("lecture_title");
        if (lecture_title) {
            lecture_title.className = "-mt-24 inline-block w-full lg:mt-0";
        }

        let my_account = document.getElementById("my_account");
        if (my_account) {
            my_account.className =
                "-mt-24 inline-block w-full text-black text-center text-xs sm:text-base lg:mt-0 dark:text-gray-200";
        }

        let table_container = document.getElementById("table_container");
        if (table_container) {
            table_container.className =
                "-mt-24 inline-block w-full text-black text-center lg:mt-0";
        }

        let appointment = document.getElementById("appointment");
        if (appointment) {
            appointment.className = "-mt-24 inline-block w-full text-black text-center text-xs sm:text-base lg:mt-0 dark:text-gray-200";
            
        }
    }
};
