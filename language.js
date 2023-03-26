function changeLanguage(language) {
    const menuItems = document.querySelectorAll('.menu-item');
    const contactTitle = document.querySelector('#contact .title');
  
    // Verify that language is valid
    const validLanguages = ['en', 'ru'];
    if (!validLanguages.includes(language)) {
      console.error('Invalid language code');
      return;
    }
  
    // Check that all required elements are present
    if (!menuItems.length || !contactTitle) {
      console.error('Missing elements');
    }
  
    // Translate elements based on language
    menuItems.forEach(item => {
      const itemName = item.querySelector('h2');
      const itemPrice = item.querySelector('p:last-of-type');
      if (!itemName || !itemPrice) {
        console.error('Missing elements for menu item');
        return;
      }
      if (language === 'ru') {
        itemName.textContent = itemName.dataset.russianName || getRussianName(itemName.textContent);
        itemPrice.innerText = `Цена: ${itemPrice.dataset.russianPrice || itemPrice.innerText}`;
        const button = item.querySelector('.button');
        if (button) {
          button.textContent = 'Заказать сейчас';
        }
      } else {
        itemName.textContent = itemName.dataset.originalName || itemName.textContent;
        itemPrice.textContent = `Price: ${itemPrice.dataset.originalPrice || itemPrice.innerText}`;
        const button = item.querySelector('.button');
        if (button) {
          button.textContent = 'Order now';
        }
      }
    });
  
    if (language === 'ru') {
      contactTitle.textContent = 'Свяжитесь с нами';
    } else {
      contactTitle.textContent = 'Get in Touch';
    }
  }
  
  // Helper function to get the Russian name of a menu item
  function getRussianName(name) {
    switch (name) {
      case 'Espresso':
        return 'Эспрессо';
      case 'Cappuccino':
        return 'Капучино';
      case 'Latte':
        return 'Латте';
      case 'Mocha':
        return 'Мокко';
      case 'Tea':
        return 'Чай';
      case 'Coffee':
        return 'Кофе';
      case 'Iced Coffee':
        return 'Холодный кофе';
      default:
        return name;
    }
  }
  