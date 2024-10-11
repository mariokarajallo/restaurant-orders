// Variables globales que usaremos en varias funciones
let ingredientList;
let productPriceButton;
let totalQuantity = 1;
let basePrice = 45000; // Este precio base puede cambiar dinámicamente
let totalPrice = basePrice;
let maxSimpleIngredients = 8;
let simpleIngredientsCount = 0;
let premiumIngredientSelected = null; // Almacena el nombre del ingrediente premium seleccionado
let premiumIngredientPrice = 0; // Almacena el precio del ingrediente premium seleccionado
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

// Función para aumentar la cantidad de productos
function increaseProductQuantity() {
  totalQuantity++;
  updatePrice();
}

// Función para disminuir la cantidad de productos
function decreaseProductQuantity() {
  if (totalQuantity > 1) {
    totalQuantity--;
    updatePrice();
  }
}

// Función para expandir o colapsar los acordeones
function toggleAccordion(id) {
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

    // Obtener el contenedor del ingrediente usando data-ingredient
    const ingredientContainer = document.querySelector(`[data-ingredient="${ingredient}"]`);
    
    // Verificar si el contenedor existe antes de continuar
    if (ingredientContainer) {
      const countElement = ingredientContainer.querySelector('.ingredient-count');
      const imgElement = ingredientContainer.querySelector('.ingredient-img');
      const borderContainer = ingredientContainer.querySelector('div');

      // Verificar si los elementos fueron encontrados en el DOM
      if (countElement) {
        countElement.textContent = ingredients[ingredient].count;
      }

      // Actualizar clases usando add y remove
      if (imgElement && borderContainer && ingredients[ingredient].count > 0) {
        imgElement.classList.remove('border-gray-400');
        imgElement.classList.add('border-yellow-500');
        
        borderContainer.classList.remove('border-gray-400');
        borderContainer.classList.add('border-yellow-500');
      }
    } else {
      console.error(`El contenedor del ingrediente "${ingredient}" no fue encontrado.`);
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

    // Obtener el contenedor del ingrediente usando data-ingredient
    const ingredientContainer = document.querySelector(`[data-ingredient="${ingredient}"]`);
    
    // Verificar si el contenedor existe antes de continuar
    if (ingredientContainer) {
      const countElement = ingredientContainer.querySelector('.ingredient-count');
      const imgElement = ingredientContainer.querySelector('.ingredient-img');
      const borderContainer = ingredientContainer.querySelector('div');

      // Verificar si los elementos fueron encontrados en el DOM
      if (countElement) {
        countElement.textContent = ingredients[ingredient].count;
      }

      // Cambiar borde de la imagen y contenedor si la cantidad es 0
      if (imgElement && borderContainer) {
        if (ingredients[ingredient].count === 0) {
          imgElement.classList.remove('border-yellow-500');
          imgElement.classList.add('border-gray-400');
          
          borderContainer.classList.remove('border-yellow-500');
          borderContainer.classList.add('border-gray-400');
        }
      }
    } else {
      console.error(`El contenedor del ingrediente "${ingredient}" no fue encontrado.`);
    }

    updateIngredientList(); // Actualizar la lista de ingredientes seleccionados
    updatePrice(); // Recalcular el precio
  }
}



// Función para seleccionar ingredientes premium
function selectPremium(ingredient, price) {
  // Si ya está seleccionado y el mismo ingrediente se vuelve a seleccionar, lo deseleccionamos
  if (premiumIngredientSelected === ingredient) {
    // Deseleccionar el ingrediente premium
    premiumIngredientSelected = null;
    premiumIngredientPrice = 0;
  } else {
    // Seleccionar nuevo ingrediente premium
    premiumIngredientSelected = ingredient;
    premiumIngredientPrice = price;
  }

  // Deseleccionar visualmente todos los ingredientes premium
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

  // Si hay un ingrediente seleccionado, aplicarle las clases visuales de seleccionado
  if (premiumIngredientSelected) {
    const selectedItem = document.querySelector(
      `[data-ingredient="${ingredient}"]`
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
  }

  updateIngredientList(); // Actualizar la lista de ingredientes
  updatePrice(); // Recalcular el precio
}

// Función para actualizar la lista de ingredientes seleccionados
function updateIngredientList() {
  ingredientList.innerHTML = ""; // Limpiar lista actual
  Object.keys(ingredients).forEach((ingredient) => {
    if (ingredients[ingredient].count > 0) {
      const listItem = document.createElement("div");
      listItem.innerHTML = `
      <div class="flex space-x-2 items-center">
        <span class="text-xs">${ingredient}:</span>
        <span class="text-sm">${ingredients[ingredient].count}</span>
      </div>
       
      
      `;
      ingredientList.appendChild(listItem);
    }
  });

  // agregar ingredientes premium a la lista
  if (premiumIngredientSelected) {
    const premiumItem = document.createElement("div");
    premiumItem.innerHTML = `
    <div class="flex space-x-2 items-center">
    <div class="w-5 h-5">
      <img src="/public/assets/icons/crown.svg" alt="Ingrediente Premium" class="w-full object-cover">
    </div>
    <span class="text-xs">${premiumIngredientSelected}</span>
    </div>
    `;
    ingredientList.appendChild(premiumItem);
  }

  if (premiumSauceSelected) {
    const sauceItem = document.createElement("li");
    sauceItem.textContent = `Salsa Premium: ${premiumSauceSelected}`;
    ingredientList.appendChild(sauceItem);
  }
}

// Función para actualizar el precio total
function updatePrice() {
  totalPrice = basePrice;

  // Añadir costo de ingredientes seleccionados
  Object.keys(ingredients).forEach((ingredient) => {
    totalPrice += ingredients[ingredient].count * ingredients[ingredient].price;
  });

  // Añadir costo de ingredientes premium si hay uno seleccionado
  if (premiumIngredientSelected) {
    totalPrice += premiumIngredientPrice; // Usar el precio dinámico del ingrediente premium seleccionado
  }

  if (premiumSauceSelected) {
    totalPrice += 10000; // Precio fijo de salsa premium
  }

  // Multiplicar el precio total por la cantidad seleccionada
  const finalPrice = totalPrice * totalQuantity;

  // Actualizar la cantidad y el precio en el botón
  productPriceButton.textContent = `Añadir ${totalQuantity} por Gs. ${finalPrice.toLocaleString()}`;

  // Actualizar la visualización de la cantidad de productos
  productQuantityElement.textContent = totalQuantity;
}

document.addEventListener("DOMContentLoaded", () => {
  const modalProduct = document.getElementById("modalProduct");
  const closeModalButton = document.getElementById("closeModalProduct");
  ingredientList = document.getElementById("ingredientList");
  productPriceButton = document.getElementById("addToCartButton");
  productQuantityElement = document.getElementById("productQuantity");

  // Función para abrir el modal y actualizar el contenido
  function openModal(productName, productPrice) {
    document.querySelector(".modal-product-name").textContent = productName;
    basePrice = productPrice;
    totalPrice = basePrice;
    totalQuantity = 1; // Reiniciar la cantidad al abrir el modal
    productPriceButton.textContent = `Añadir 1 por Gs. ${totalPrice.toLocaleString()}`;
    modalProduct.classList.remove("hidden"); // Mostrar el modal
    productQuantityElement.textContent = totalQuantity; // Restablecer el contador visual
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
  // Event listeners para aumentar/disminuir la cantidad de productos
  document
    .getElementById("increaseQuantity")
    .addEventListener("click", increaseProductQuantity);
  document
    .getElementById("decreaseQuantity")
    .addEventListener("click", decreaseProductQuantity);

  // Cerrar el modal
  closeModalButton.addEventListener("click", () => {
    modalProduct.classList.add("hidden"); // Ocultar el modal
  });
});
