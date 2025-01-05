const getCountCart = async (token) => {
    const response = await fetch("/count-cart", {
        body: {},
        method: "post",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": token,
        },
    });
    const data = await response.json();
    if (response.status == 200) {
        document.querySelector(".count-items").innerHTML = data.data;
    }
};
