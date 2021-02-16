<?php declare(strict_types=1);

namespace Hyva\Admin\ViewModel\HyvaForm;

interface FormFieldDefinitionInterface
{
    public function getName(): string;

    public function getFormName(): string;

    public function getHtml(): string;

    /**
     * @return FormFieldOptionInterface[]
     */
    public function getOptions(): array;

    public function getGroupId(): string;

    public function getInputType(): string;

    public function isEnabled(): bool;
}
