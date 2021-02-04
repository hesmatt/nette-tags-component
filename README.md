This component is an easy way to add input tags to your Nette projects

### Installation

Copy or git clone this repository.

Move it into your Nette project folder

Create component in your Presenter like this
```php
protected function createComponentTags(): TagsControl
{
    $tags = new TagsControl();
    $tags->setId('tagsValues');
    $tags->setPlaceholder('We all love tags!');
    return $tags;
}
```

You can also change the main and secondary color by adding
```php
$tags->setColors(['Main color (in HEX)','Secondary color (in HEX)'])
```

### How does it look?

Default look
![1](https://i.imgur.com/0WYGgpG.png)

Inputting tags
![2](https://i.imgur.com/1xDSBh4.png)

With tags (and on hover)
![3](https://i.imgur.com/479HnMl.png)

Whole process
![4](https://i.imgur.com/3CfNJ2E.gif)

Yes, I know it looks amazing!



I made this for my project, thought it might be useful for others too!
Pull requests are welcomed.

