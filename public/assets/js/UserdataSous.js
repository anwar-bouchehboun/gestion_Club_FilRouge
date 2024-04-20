window.onload = async function () {
    search();
};
const searchInput = document.querySelector("#searchInput");
searchInput.addEventListener("input", search);
function search() {
    var searchTerm = document.getElementById("searchInput").value ?? "";
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                var jsonResponse = JSON.parse(data);
                console.log(jsonResponse);

                var contentTr = document.getElementById("content_tr");
                contentTr.innerHTML = "";

                jsonResponse.forEach(function (user, index) {
                    var newRow = document.createElement("tr");
                    newRow.innerHTML = `
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">${
        index + 1
    }</th>
    <td class="px-6 py-4">${user.users.name}</td>
    <td class="px-6 py-4">${user.users.email}</td>
    <td class="px-6 py-4">${user.reservable.name}</td>
    <td class="px-6 py-4">
        <img src="../storage/${user.reservable.image}"
                                        alt="${user.reservable.image}"
                                        class="w-16 h-16 mb-3 rounded-full shadow-lg "></td>
                                        <td class="flex px-6 py-4">

           <button onclick="openDeleteModal(${user.id})"

                                            class="mr-4 text-blue-500 hover:text-blue-700" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                                                <path
                                                    d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                                    data-original="#000000" />
                                                <path
                                                    d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                                    data-original="#000000" />
                                            </svg>
                                        </button>



                                    </td>
`;
                    contentTr.appendChild(newRow);
                });
            } else {
                console.error("Error fetching data:", xhr.status);
            }
        }
    };
    xhr.open(
        "GET",
        "http://127.0.0.1:8000/user/search?search=" + searchTerm,
        true
    );
    xhr.send();
}
