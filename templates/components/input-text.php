
<div class="mdc-text-field">
    <input type="text" id="my-text-field" class="mdc-text-field__input">
    <label class="mdc-floating-label" for="my-text-field">Имя</label>
    <div class="mdc-line-ripple"></div>
</div>

<style>
    .mdc-text-field {
        position: relative;
        height: 60px;
    }

    .mdc-text-field__input {
        font-family: Gordita, sans-serif;
        padding-top: 19px;
        padding-left: 20px;
        padding-right: 20px;
        width: 100%;
        position: absolute;
        height: 60px;
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 150%;
        background: var(--blue-light);
        border-radius: 4px;
        border: 1px solid rgba(0, 0, 0, 0);
        color: var(--dark-90);
    }

    .mdc-floating-label {
        position: absolute;
        padding-left: 21px;
        padding-top: 19px;
        transition: all 0.3s ease;
        font-family: Gordita, sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 150%;
        color: var(--black-blue-50);
        pointer-events: none;
    }

    .mdc-floating-label-in {
        font-size: 14px;
        padding-top: 8px;
    }

    .mdc-text-field__input:hover {
        border: 1px solid var(--tertiary-text-1)
    }

    .mdc-text-field__input:focus {
        border: 1px solid var(--blue);
        outline: none;
        color: var(--dark-90);
    }

</style>