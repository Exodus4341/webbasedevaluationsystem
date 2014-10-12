<?php
class Controller_Admin_Category extends Controller_Admin 
{

	public function action_index()
	{
		$data['categories'] = Model_Category::find('all');
		$this->template->title = "Category";
		$this->template->content = View::forge('admin\category/index', $data);

	}

	public function action_view($id = null)
	{
		$data['category'] = Model_Category::find($id);

		$this->template->title = "Category";
		$this->template->content = View::forge('admin\category/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Category::validate('create');

			if ($val->run())
			{
				$category = Model_Category::forge(array(
					'cat_name' => Input::post('cat_name'),
					'percentage' => Input::post('percentage'),
				));

				if ($category and $category->save())
				{
					Session::set_flash('success', e('Added category #'.$category->id.'.'));

					Response::redirect('admin/category');
				}

				else
				{
					Session::set_flash('error', e('Could not save category.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Category";
		$this->template->content = View::forge('admin\category/create');

	}

	public function action_edit($id = null)
	{
		$category = Model_Category::find($id);
		$val = Model_Category::validate('edit');

		if ($val->run())
		{
			$category->cat_name = Input::post('cat_name');
			$category->percentage = Input::post('percentage');
			// $category->subj_id = Input::post('subj_id');

			if ($category->save())
			{
				Session::set_flash('success', e('Updated category #' . $id));

				Response::redirect('admin/category');
			}

			else
			{
				Session::set_flash('error', e('Could not update category #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$category->category = $val->validated('cat_name');
				$category->category = $val->validated('percentage');
				// $category->subj_id = $val->validated('subj_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('category', $category, false);
		}

		$this->template->title = "Category";
		$this->template->content = View::forge('admin\category/edit');

	}

	public function action_delete($id = null)
	{
		if ($category = Model_Category::find($id))
		{
			$category->delete();

			Session::set_flash('success', e('Deleted category #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete category #'.$id));
		}

		Response::redirect('admin/category');

	}


}