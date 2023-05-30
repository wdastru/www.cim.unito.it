function showFormBox(id: string): void {
	if (document.getElementById) {
		const hiddenBox: HTMLElement | null = document.getElementById('hiddenBox');
		if (hiddenBox != null) {
			const cssObj: CSSStyleDeclaration
				= window.getComputedStyle(hiddenBox, null);
			const visibility: string = cssObj.getPropertyValue("visibility");

			if (visibility == 'hidden') {
				const hiddenSeqNameInput: HTMLElement | null = document.getElementById('hiddenSeqNameInput');
				if (hiddenSeqNameInput != null) {
					let value_attribute: Attr | null = hiddenSeqNameInput.attributes.getNamedItem('value');
					if (value_attribute != null) {
						value_attribute.value = id;
					} else {
						console.log("value_attribute is null");
					}
					hiddenBox.style.display = 'block';
					hiddenBox.style.visibility = 'visible';
				}
			} else {
				console.log("hiddenSeqNameInput is null");
			}
		} else {
			console.log("hiddenBox is null");
		}
	} else {
		alert(":( DOM not supported!");
	}
}

function hideFormBox(): void {
	if (document.getElementById) {
		const hiddenBox: HTMLElement | null = document.getElementById('hiddenBox');
		if (hiddenBox != null) {
			const cssObj: CSSStyleDeclaration
				= window.getComputedStyle(hiddenBox, null);
			const visibility: string = cssObj.getPropertyValue("visibility");

			if (visibility == 'visible') {
				hiddenBox.style.display = 'none';
				hiddenBox.style.visibility = 'hidden';
			} else {
				console.log("visibility is not set to visible");
			}
		} else {
			console.log("hiddenBox is null");
		}
	} else {
		alert(":( DOM not supported!");
	}
}
