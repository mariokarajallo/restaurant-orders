// Variables globales que usaremos en varias funciones
let ingredientList;
let productPriceButton;
let totalQuantity = 1;
let basePrice = 45000; // Este precio base puede cambiar dinámicamente
let totalPrice = basePrice;
let maxSimpleIngredients = 8;
let simpleIngredientsCount = 0;
let premiumIngredientSelected = null;
let premiumSauceSelected = null;

const ingredients = {
  aceitunaNegra: { count: 0, price: 0 },
  aceitunaVerde: { count: 0, price: 0 },
  quesoRallado: { count: 0, price: 3000 },
  pancito: { count: 0, price: 0 },
};

const sauces = {
  bolognesa: { selected: false, price: 0 },
  mixta: { selected: false, price: 0 },
};

// Función para expandir o colapsar los acordeones
function toggleAccordion(id) {
  console.log("toggleAccordion llamado para:", id); // Agrega un log para verificar que la función se está llamando
  const accordion = document.getElementById(id); // Selecciona el acordeón por su ID
  if (accordion.classList.contains("hidden")) {
    accordion.classList.remove("hidden"); // Mostrar el acordeón
  } else {
    accordion.classList.add("hidden"); // Ocultar el acordeón
  }
}

// Función para aumentar la cantidad de un ingrediente simple
function increaseIngredient(ingredient, limit) {
  if (simpleIngredientsCount < limit && ingredients[ingredient].count < 5) {
    ingredients[ingredient].count++;
    simpleIngredientsCount++;

    // Actualizar el contador visual del ingrediente
    const ingredientContainer = document.querySelector([data-ingredient="${ingredient}"]);
    const countElement = ingredientContainer.querySelector('.ingredient-count');
    countElement.textContent = ingredients[ingredient].count;

    // Cambiar el borde del contenedor y la imagen
    const imgElement = ingredientContainer.querySelector('.ingredient-image');
    const borderContainer = ingredientContainer.querySelector('div');

    if (ingredients[ingredient].count > 0) {
      imgElement.classList.replace('border-gray-400', 'border-yellow-500');
      borderContainer.classList.replace('border-gray-400', 'border-yellow-500');
    }

    updateIngredientList(); // Actualizar la lista de ingredientes seleccionados
    updatePrice(); // Recalcular el precio
  }
}

// Función para disminuir la cantidad de un ingrediente simple
function decreaseIngredient(ingredient) {
  if (ingredients[ingredient].count > 0) {
    ingredients[ingredient].count--;
    simpleIngredientsCount--;

    // Actualizar el contador visual del ingrediente
    const ingredientContainer = document.querySelector([data-ingredient="${ingredient}"]);
    const countElement = ingredientContainer.querySelector('.ingredient-count');
    countElement.textContent = ingredients[ingredient].count;

    // Cambiar el borde del contenedor y la imagen si es 0
    const imgElement = ingredientContainer.querySelector('.ingredient-image');
    const borderContainer = ingredientContainer.querySelector('div');

    if (ingredients[ingredient].count === 0) {
      imgElement.classList.replace('border-yellow-500', 'border-gray-400');
      borderContainer.classList.replace('border-yellow-500', 'border-gray-400');
    }

    updateIngredientList(); // Actualizar la lista de ingredientes seleccionados
    updatePrice(); // Recalcular el precio
  }
}


// Función para actualizar la lista de ingredientes seleccionados
function updateIngredientList() {
  ingredientList.innerHTML = ""; // Limpiar lista actual
  Object.keys(ingredients).forEach((ingredient) => {
    if (ingredients[ingredient].count > 0) {
      const listItem = document.createElement("li");
      listItem.textContent = ${ingredient}: ${ingredients[ingredient].count};
      ingredientList.appendChild(listItem);
    }
  });

  if (premiumIngredientSelected) {
    const premiumItem = document.createElement("li");
    premiumItem.textContent = Ingrediente Premium: ${premiumIngredientSelected};
    ingredientList.appendChild(premiumItem);
  }

  if (premiumSauceSelected) {
    const sauceItem = document.createElement("li");
    sauceItem.textContent = Salsa Premium: ${premiumSauceSelected};
    ingredientList.appendChild(sauceItem);
  }
}

function selectPremium(ingredient, price) {
  // Deseleccionar todos los ingredientes premium
  const allPremiumItems = document.querySelectorAll(".premium-item");
  allPremiumItems.forEach((item) => {
    item.classList.remove("border-yellow-500");
    item.classList.add("border-gray-400");

    const imgElement = item.querySelector(".premium-img");
    const borderContainer = item.querySelector("div");
    const checkIcon = item.querySelector(".premium-check");

    // Restablecer borde de imagen y contenedor
    imgElement.classList.replace("border-yellow-500", "border-gray-400");
    borderContainer.classList.replace("border-yellow-500", "border-gray-400");

    // Restablecer el color del icono de selección
    checkIcon.classList.replace("bg-yellow-500", "bg-gray-200");
    checkIcon
      .querySelector("svg")
      .classList.replace("text-yellow-500", "text-gray-500");
  });

  // Seleccionar el ingrediente premium clickeado
  const selectedItem = document.querySelector(
    [data-ingredient="${ingredient}"]
  );
  const selectedImg = selectedItem.querySelector(".premium-img");
  const selectedContainer = selectedItem.querySelector("div");
  const selectedCheckIcon = selectedItem.querySelector(".premium-check");

  // Cambiar borde del contenedor y la imagen
  selectedImg.classList.replace("border-gray-400", "border-yellow-500");
  selectedContainer.classList.replace("border-gray-400", "border-yellow-500");

  // Cambiar el fondo y el color del icono de selección
  selectedCheckIcon.classList.replace("bg-gray-200", "bg-yellow-500");
  selectedCheckIcon
    .querySelector("svg")
    .classList.replace("text-gray-500", "text-yellow-500");

  // Guardar el ingrediente premium seleccionado y actualizar el precio
  premiumIngredientSelected = ingredient;
  updateIngredientList();
  updatePrice();
}




// Función para actualizar el precio total
function updatePrice() {
  totalPrice = basePrice;

  // Añadir costo de ingredientes seleccionados
  Object.keys(ingredients).forEach((ingredient) => {
    totalPrice += ingredients[ingredient].count * ingredients[ingredient].price;
  });

  // Añadir costo de ingredientes premium
  if (premiumIngredientSelected) {
    totalPrice += 10000; // Precio fijo de ingredientes premium
  }

  if (premiumSauceSelected) {
    totalPrice += 10000; // Precio fijo de salsa premium
  }

  productPriceButton.textContent = Añadir ${totalQuantity} por Gs. ${totalPrice.toLocaleString()};
}

document.addEventListener("DOMContentLoaded", () => {
  const modalProduct = document.getElementById("modalProduct");
  const closeModalButton = document.getElementById("closeModalProduct");
  ingredientList = document.getElementById("ingredientList");
  productPriceButton = document.getElementById("addToCartButton");

  // Función para abrir el modal y actualizar el contenido
  function openModal(productName, productPrice) {
    document.querySelector(".modal-product-name").textContent = productName;
    basePrice = productPrice;
    totalPrice = basePrice;
    productPriceButton.textContent = Añadir 1 por Gs. ${totalPrice.toLocaleString()};
    modalProduct.classList.remove("hidden"); // Mostrar el modal
  }

  // Agregar eventos de clic a todos los botones con la clase "open-modal-btn"
  const openModalButtons = document.querySelectorAll(".open-modal-btn");
  openModalButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const customizable = button.getAttribute("data-customizable") === "true";
      const productName = button.getAttribute("data-product-name");
      const productPrice = parseInt(
        button.getAttribute("data-product-price"),
        10
      );

      if (customizable) {
        openModal(productName, productPrice); // Abrir el modal y pasar los valores del producto
      } else {
        alert("Este producto no es personalizable");
      }
    });
  });

  // Event listener para ingredientes premium
  document
    .getElementById("premiumIngredient")
    .addEventListener("change", function () {
      premiumIngredientSelected = this.options[this.selectedIndex].text;
      updateIngredientList();
      updatePrice();
    });

  // Event listener para salsas premium
  document
    .getElementById("premiumSauce")
    .addEventListener("change", function () {
      premiumSauceSelected = this.options[this.selectedIndex].text;
      updateIngredientList();
      updatePrice();
    });

  // Cerrar el modal
  closeModalButton.addEventListener("click", () => {
    modalProduct.classList.add("hidden"); // Ocultar el modal
  });
});