function deleteProduct(id) {
    if (!confirm("Deseja realmente excluir este produto?")) {
        return;
    }

    fetch("/products/" + id, {
        method: "DELETE",
        headers: {
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
    }).then(() => {
        window.location.href = "/products/";
    });
}
